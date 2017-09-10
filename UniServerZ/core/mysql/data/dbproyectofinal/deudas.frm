TYPE=VIEW
query=select distinct concat(`dbproyectofinal`.`clientes`.`Nombres`,\' \',`dbproyectofinal`.`clientes`.`Apellidos`) AS `Nombres`,`dbproyectofinal`.`asistencias`.`idActividades` AS `idActividades`,`dbproyectofinal`.`actividades`.`Nombre` AS `Actividad`,if(((select `dbproyectofinal`.`clientesactividades`.`idModalidades` from `dbproyectofinal`.`clientesactividades` where ((`dbproyectofinal`.`clientesactividades`.`idClientes` = `dbproyectofinal`.`asistencias`.`idClientes`) and (`dbproyectofinal`.`clientesactividades`.`idActividades` = `dbproyectofinal`.`asistencias`.`idActividades`))) = 2),month(`dbproyectofinal`.`asistencias`.`Fecha`),`dbproyectofinal`.`asistencias`.`Fecha`) AS `Fecha`,(select `dbproyectofinal`.`actividadesaranceles`.`Precio` from `dbproyectofinal`.`actividadesaranceles` where ((`dbproyectofinal`.`actividadesaranceles`.`idActividades` = `dbproyectofinal`.`asistencias`.`idActividades`) and (`dbproyectofinal`.`actividadesaranceles`.`FechaInicio` < `dbproyectofinal`.`asistencias`.`Fecha`) and (`dbproyectofinal`.`actividadesaranceles`.`idModosDePago` = (select `dbproyectofinal`.`clientesactividades`.`idModosDePago` from `dbproyectofinal`.`clientesactividades` where ((`dbproyectofinal`.`clientesactividades`.`idClientes` = `dbproyectofinal`.`asistencias`.`idClientes`) and (`dbproyectofinal`.`clientesactividades`.`idActividades` = `dbproyectofinal`.`asistencias`.`idActividades`)))) and (`dbproyectofinal`.`actividadesaranceles`.`idModalidades` = (select `dbproyectofinal`.`clientesactividades`.`idModalidades` from `dbproyectofinal`.`clientesactividades` where ((`dbproyectofinal`.`clientesactividades`.`idClientes` = `dbproyectofinal`.`asistencias`.`idClientes`) and (`dbproyectofinal`.`clientesactividades`.`idActividades` = `dbproyectofinal`.`asistencias`.`idActividades`)))))) AS `Monto`,`dbproyectofinal`.`asistencias`.`idClientes` AS `idClientes` from ((`dbproyectofinal`.`asistencias` left join `dbproyectofinal`.`clientes` on((`dbproyectofinal`.`asistencias`.`idClientes` = `dbproyectofinal`.`clientes`.`idClientes`))) left join `dbproyectofinal`.`actividades` on((`dbproyectofinal`.`asistencias`.`idActividades` = `dbproyectofinal`.`actividades`.`idActividades`))) where (`dbproyectofinal`.`asistencias`.`Abonado` = 0)
md5=14e2cfe47221f4b68516c1af80e42c1f
updatable=0
algorithm=0
definer_user=root
definer_host=127.0.0.1
suid=2
with_check_option=0
timestamp=2017-09-08 11:03:24
create-version=1
source=select distinct concat(`dbproyectofinal`.`clientes`.`Nombres`,\' \',`dbproyectofinal`.`clientes`.`Apellidos`) AS `Nombres`,`dbproyectofinal`.`asistencias`.`idActividades` AS `idActividades`,`dbproyectofinal`.`actividades`.`Nombre` AS `Actividad`,if((SELECT clientesactividades.idModalidades FROM clientesactividades where clientesactividades.idClientes = asistencias.idClientes AND clientesactividades.idActividades = asistencias.idActividades) = 2, month(`dbproyectofinal`.`asistencias`.`Fecha`),`dbproyectofinal`.`asistencias`.`Fecha`) AS `Fecha`, (select `Precio` from `dbproyectofinal`.`actividadesaranceles` where `actividadesaranceles`.`idActividades` = `asistencias`.`idActividades` and `actividadesaranceles`.`FechaInicio` < `asistencias`.`Fecha` and `actividadesaranceles`.`idModosDePago` = (select clientesactividades.idModosDePago from `clientesactividades` where `dbproyectofinal`.`clientesactividades`.`idClientes` = `dbproyectofinal`.`asistencias`.`idClientes` and `dbproyectofinal`.`clientesactividades`.`idActividades` = `dbproyectofinal`.`asistencias`.`idActividades`) and `actividadesaranceles`.`idModalidades` = (select `clientesactividades`.`idModalidades` from `clientesactividades` where `clientesactividades`.`idClientes` = `dbproyectofinal`.`asistencias`.`idClientes` and `dbproyectofinal`.`clientesactividades`.`idActividades` = `dbproyectofinal`.`asistencias`.`idActividades`)) AS `Monto`,`dbproyectofinal`.`asistencias`.`idClientes` AS `idClientes` from ((`dbproyectofinal`.`asistencias` left join `dbproyectofinal`.`clientes` on((`dbproyectofinal`.`asistencias`.`idClientes` = `dbproyectofinal`.`clientes`.`idClientes`))) left join `dbproyectofinal`.`actividades` on((`dbproyectofinal`.`asistencias`.`idActividades` = `dbproyectofinal`.`actividades`.`idActividades`))) where (`dbproyectofinal`.`asistencias`.`Abonado` = 0)
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select distinct concat(`dbproyectofinal`.`clientes`.`Nombres`,\' \',`dbproyectofinal`.`clientes`.`Apellidos`) AS `Nombres`,`dbproyectofinal`.`asistencias`.`idActividades` AS `idActividades`,`dbproyectofinal`.`actividades`.`Nombre` AS `Actividad`,if(((select `dbproyectofinal`.`clientesactividades`.`idModalidades` from `dbproyectofinal`.`clientesactividades` where ((`dbproyectofinal`.`clientesactividades`.`idClientes` = `dbproyectofinal`.`asistencias`.`idClientes`) and (`dbproyectofinal`.`clientesactividades`.`idActividades` = `dbproyectofinal`.`asistencias`.`idActividades`))) = 2),month(`dbproyectofinal`.`asistencias`.`Fecha`),`dbproyectofinal`.`asistencias`.`Fecha`) AS `Fecha`,(select `dbproyectofinal`.`actividadesaranceles`.`Precio` from `dbproyectofinal`.`actividadesaranceles` where ((`dbproyectofinal`.`actividadesaranceles`.`idActividades` = `dbproyectofinal`.`asistencias`.`idActividades`) and (`dbproyectofinal`.`actividadesaranceles`.`FechaInicio` < `dbproyectofinal`.`asistencias`.`Fecha`) and (`dbproyectofinal`.`actividadesaranceles`.`idModosDePago` = (select `dbproyectofinal`.`clientesactividades`.`idModosDePago` from `dbproyectofinal`.`clientesactividades` where ((`dbproyectofinal`.`clientesactividades`.`idClientes` = `dbproyectofinal`.`asistencias`.`idClientes`) and (`dbproyectofinal`.`clientesactividades`.`idActividades` = `dbproyectofinal`.`asistencias`.`idActividades`)))) and (`dbproyectofinal`.`actividadesaranceles`.`idModalidades` = (select `dbproyectofinal`.`clientesactividades`.`idModalidades` from `dbproyectofinal`.`clientesactividades` where ((`dbproyectofinal`.`clientesactividades`.`idClientes` = `dbproyectofinal`.`asistencias`.`idClientes`) and (`dbproyectofinal`.`clientesactividades`.`idActividades` = `dbproyectofinal`.`asistencias`.`idActividades`)))))) AS `Monto`,`dbproyectofinal`.`asistencias`.`idClientes` AS `idClientes` from ((`dbproyectofinal`.`asistencias` left join `dbproyectofinal`.`clientes` on((`dbproyectofinal`.`asistencias`.`idClientes` = `dbproyectofinal`.`clientes`.`idClientes`))) left join `dbproyectofinal`.`actividades` on((`dbproyectofinal`.`asistencias`.`idActividades` = `dbproyectofinal`.`actividades`.`idActividades`))) where (`dbproyectofinal`.`asistencias`.`Abonado` = 0)
