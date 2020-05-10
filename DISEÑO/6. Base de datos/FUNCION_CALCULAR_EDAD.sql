DELIMITER &
CREATE FUNCTION FN_CALCULAR_EDAD (P_AZO_NACIMIENTO INT)
RETURNS INT
-- Se debe colocar esto para que permita la creacion de funciones
DETERMINISTIC
READS SQL DATA

BEGIN
	DECLARE V_AZO_ACTUAL 	INT ;
	DECLARE V_EDAD 			INT ;
    
    SELECT AZO_ACTUAL INTO V_AZO_ACTUAL FROM (SELECT CAST(SUBSTRING(SYSDATE(),1,4) AS SIGNED) AS AZO_ACTUAL) AS ACTUAL_AZO;
    
    SET V_EDAD = V_AZO_ACTUAL - P_AZO_NACIMIENTO;
    
RETURN V_EDAD;
END &


/*
 DELIMITER //
DROP PROCEDURE if exists calcular_Edad;CREATE PROCEDURE calcular_Edad(p_azo_nacimiento int)
	BEGIN 	-- inicia bloque de ejecucion
		DECLARE v_azo_actual 	int default 2020;
        DECLARE v_edad 			int ;
        
        set v_edad = v_azo_actual - p_azo_nacimiento;
        
        select v_edad;
    END //	-- termina bloque de ejecucion
 DELIMITER ;

*/