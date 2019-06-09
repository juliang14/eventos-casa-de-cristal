# -*- encoding: utf-8 -*-
import os
import datetime
import webbrowser

from wb import *
import grt
import mforms as gui

ModuleInfo = DefineModule(name="WB DiccioDat",
                          author="Tohure",
                          version="0.9.1")
@ModuleInfo.plugin("mi.plugin.crear_dicciodat",
                   caption="Generar Diccionario de Datos HTML",
                   input=[wbinputs.currentCatalog()],
                   pluginMenu="Catalog")
@ModuleInfo.export(grt.INT, grt.classes.db_Catalog)

def create_datadict(catalog):

    # Obtener las tablas a partir del modelo
    #
    schema = catalog.defaultSchema
    tables = schema.tables

    # Organizar tablas alfabéticamente
    #
    sorted_tables = sorted(tables, key=lambda table: table.name)

    # Añadir encabezado y añadir las variables de cabecera (Nombre de la Base, Descripción de la base, Fecha)
    #
    markup = get_header()
    markup = markup.replace("[PROJECTNAME]", schema.name)
    markup = markup.replace("[DESCRIPTION]", schema.comment)
    markup = markup.replace("[EDITION]", str(datetime.date.today()))

    # Añadir un índice de tablas ordenado alfabéticamente
    #
    markup += "<h2>Índice</h2>\n"
    markup += "<ul>\n"
    for table in sorted_tables:
        markup += "<li><a href='#{0}'>{0}</a></li>\n".format(table.name)
    markup += "</ul>\n"

    # Convertir tablas a objetos HTML
    #
    for table in sorted_tables:
        markup += "<table id='{0}'>\n".format(table.name)
        markup += "<caption>{0}</caption>\n".format(table.name)
        markup += "<tr><td colspan='11'>{0}</td></tr>\n".format(table.comment)
        markup += get_colnames()
        # Esta parte es opcional si se desea ordenar las columnas alfabéticamente
        #sorted_columns = sorted(table.columns,
        #                        key=lambda column: column.name)
        for column in table.columns:
            markup += "<tr>\n"
            markup += "    <td>{0}</td>\n".format(column.name)
            markup += "    <td>{0}</td>\n".format(column.formattedType)

            # Comprobar Llave Primaria (PRIMARY KEY)
            if table.isPrimaryKeyColumn(column):
                markup += "    <td>&#10004;</td>\n"
            else:
                markup += "    <td>&nbsp;</td>\n"

            # Comprobar atributo no nulos (NOT NULL)
            if column.isNotNull == 1:
                markup += "    <td>&#10004;</td>\n"
            else:
                markup += "    <td>&nbsp;</td>\n"

            # Comprobar atributo único (UNIQUE)
            if False:
                markup += "    <td>&#10004;</td>\n"
            else:
                markup += "    <td>&nbsp;</td>\n"

            # Comprobar atributos Binary, Unsigned y Zero Fill
            flags = list(column.flags)

            if flags.count("BINARY"):
                markup += "    <td>&#10004;</td>\n"
            else:
                markup += "    <td>&nbsp;</td>\n"

            if flags.count("UNSIGNED"):
                markup += "    <td>&#10004;</td>\n"
            else:
                markup += "    <td>&nbsp;</td>\n"

            if flags.count("ZEROFILL"):
                markup += "    <td>&#10004;</td>\n"
            else:
                markup += "    <td>&nbsp;</td>\n"

            # Comprobar atributo auto incremental
            if column.autoIncrement == 1:
                markup += "    <td>&#10004;</td>\n"
            else:
                markup += "    <td class='attr'>&nbsp;</td>\n"

            # Agregar valor por defecto
            dv = column.defaultValue
            markup += "    <td>{0}</td>\n".format(dv)


            markup += "    <td>{0}</td>\n".format(column.comment)
            markup += "</tr>\n"

    markup += "</table>\n"

    # Añadir pie de página
    #
    markup += get_footer()

    # Guardar el archivo HTML en el disco
    #
    doc_path = os.path.dirname(grt.root.wb.docPath)

    dialog = gui.FileChooser(gui.SaveFile)
    dialog.set_title("Guardando Diccionario de Datos HTML")
    dialog.set_directory(doc_path)
    response = dialog.run_modal()
    file_path = dialog.get_path()

    if response:
        try:
            html_file = open(file_path, "w")
        except IOError:
            text = "No se puede abrir {0}.".format(file_path)
            gui.Utilities.show_error("Error al guardar el archivo", text, "Ok",
                                       "", "")
        else:
            html_file.write(markup)
            html_file.close()

            title = "Diccionario de Datos - {0}".format(schema.name)
            text = "El diccionario de datos fue generado satisfactoriamente."
            gui.Utilities.show_message(title, text, "Ok", "", "")

            # Abrir el archivo HTML generado en el navegador
            #
            try:
                webbrowser.open_new(file_path)
            except webbrowser.Error:
                print("Error: No se puede abrir el diccionario de datos en " +
                      "el navegador Web.")


    return 0


def get_header():
    """Devuelve la parte superior del documento HTML."""
    header = """<!DOCTYPE html>\n\
<html>\n\
<head>\n\
    <meta charset="UTF-8" />\n\
    <meta name="author" content="DicDat" />\n\
    <meta name="description" content="BD [PROJECTNAME]" />\n\
    <title>[PROJECTNAME] Diccionario</title>\n\
    <style type="text/css">\n\
    table{\n\
        width: 100%;\n\
        margin-bottom: 30px;\n\
    }\n\
    abbr{\n\
        cursor: help;\n\
    }\n\
    table, td, th{\n\
        border-style: solid;\n\
        border-width: 1px;\n\
    }\n\
    table caption{\n\
        font-size: 120%;\n\
        font-weight: bold;\n\
    }\n\
    caption{\n\
        color: black;\n\
    }\n\
    td, th{\n\
        border-color: silver;\n\
    }\n\
    tr:hover{\n\
        color: #333;\n\
        background-color: #F2F2F2;\n\
    }\n\
    th{\n\
        background-color: silver;\n\
    }\n\
    td{\n\
        color: gray;\n\
    }\n\
    ul{\n\
        font-style: italic;\n\
    }\n\
    #title-sect{\n\
        color: gray;\n\
        text-align: right;\n\
    }\n\
    .proj-desc{\n\
        text-align: right;\n\
    }\n\
    </style>\n\
</head>\n\
<body>\n\
<div id="title-sect">\n\
<h1>BD [PROJECTNAME]<br> Diccionario de Datos</h1>\n\
<p>\n\
<em>[EDITION]</em>\n\
</p>\n\
<p class="proj-desc">\n\
<em>[DESCRIPTION]</em>\n\
</p>\n\
</div>\n\
"""
    return header


def get_colnames():
    """Devuelve los nombres de columna por defecto para cada tabla."""
    colnames = ("<tr>\n" +
                "    <th>Columna</th>\n" +
                "    <th>Tipo de dato</th>\n" +
                "    <th><abbr title='Llave Primaria'>PK</abbr></th>\n" +
                "    <th><abbr title='No Nulo'>NN</abbr></th>\n" +
                "    <th><abbr title='Único'>UQ</abbr></th>\n" +
                "    <th><abbr title='Binario'>BIN</abbr></th>\n" +
                "    <th><abbr title='Unsigned'>UN</abbr></th>\n" +
                "    <th><abbr title='Zero Fill'>ZF</abbr></th>\n" +
                "    <th><abbr title='Auto Incremental'>AI</abbr></th>\n" +
                "    <th>Default</th>\n" +
                "    <th>Commentarios</th>\n" +
                "</tr>\n")
    return colnames


def get_footer():
    """Devuelve la parte inferior del documento HTML."""
    return "</body>\n</html>"