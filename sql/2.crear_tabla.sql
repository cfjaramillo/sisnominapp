USE SISNOMINA;

CREATE TABLE IF NOT EXISTS nomina(
    cedula BIGINT,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    dias_trabajados BIGINT,
    tarifa_trabajados DECIMAL (15,2),
    comision DECIMAL(15,2),
    horas_extras_diurnas BIGINT,
    horas_extras_nocturnas DECIMAL(15,2),
    horas_extras_dominicales_diurnas BIGINT,
    horas_extras_dominicales_nocturnas DECIMAL(15,2),
    total_devengado DECIMAL(15,2),
    fecha_registro DATE
);