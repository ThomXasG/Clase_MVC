<h2>ESTUDIANTES UTA</h2>

<table id="dg" title="My Users" class="easyui-datagrid" style="width:700px;height:250px" url="models/acceder.php"
    toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
        <tr>
            <th field="estCedula" width="50">Cedula</th>
            <th field="estNombre" width="50">Nombre</th>
            <th field="estApellido" width="50">Apellido</th>
            <th field="estTelefono" width="50">Teléfono</th>
            <th field="estDireccion" width="50">Dirección</th>
            <th field="curId" width="50">cuID</th>
        </tr>
    </thead>
</table>
<div id="toolbar">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo
        Estudiante</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true"
        onclick="editUser()">Actualizar Estudiante</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true"
        onclick="destroyUser()">Eliminar Estudiante</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" plain="true" onclick="reporteGeneral()">Reporte General</a>
    <input id="cedula" name="cedula" class="easyui-textbox" label="Buscar por Cedula" style="width:200px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-search" plain="true" onclick="buscarEstCed()">Buscar</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" plain="true" onclick="reporteGeneral2()">Reporte General</a>
</div>

<div id="dlg" class="easyui-dialog" style="width:400px"
    data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
    <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
        <h3>Nuevo Estudiante</h3>
        <div style="margin-bottom:10px">
            <input name="cedula" class="easyui-textbox" required="true" label="Cedula:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="nombre" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="apellido" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="telefono" class="easyui-textbox" required="true" label="Teléfono:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="direccion" class="easyui-textbox" required="true" label="Dirección:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="cuID" id="cuID" class="easyui-combobox" required="true" label="Curso:" style="width:100%"
                data-options="valueField:'curId',textField:'curId',url:'models/selectCUID.php',method:'get'">
        </div>
    </form>
</div>
<div id="dlg-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()"
        style="width:90px">Guardar</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel"
        onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
</div>

<div id="dlge" class="easyui-dialog" style="width:400px"
    data-options="closed:true,modal:true,border:'thin',buttons:'#dlge-buttons'">
    <form id="fme" method="post" novalidate style="margin:0;padding:20px 50px">
        <h3>Editar Estudiante</h3>
        <input type="hidden" name="cedula" id="cedula">
        <div style="margin-bottom:10px">
            <input name="nombre" id="nombre" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="apellido" id="apellido" class="easyui-textbox" required="true" label="Apellido:"
                style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="telefono" id="telefono" class="easyui-textbox" required="true" label="Teléfono:"
                style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="direccion" id="direccion" class="easyui-textbox" required="true" label="Dirección:"
                style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="cuID" id="cuID" class="easyui-combobox" required="true" label="Curso:" style="width:100%"
                data-options="valueField:'curId',textField:'curId',url:'models/selectCUID.php',method:'get'">
        </div>
    </form>
</div>
<div id="dlge-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="updateUser()"
        style="width:90px">Actualizar</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel"
        onclick="javascript:$('#dlge').dialog('close')" style="width:90px">Cancelar</a>
</div>
<script type="text/javascript">
    var url;
    function newUser() {
        $('#dlg').dialog('open').dialog('center').dialog('setTitle', 'Nuevo Estudiante');
        $('#fm').form('clear');
        $('#cuID').combobox('reload', 'models/selectCUID.php'); // Recargar el combobox con los datos actualizados
        url = 'models/guardar.php';
    }
    function editUser() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $('#dlge').dialog('open').dialog('center').dialog('setTitle', 'Actualizar Estudiante');

            // Cargar datos en los campos del formulario
            $('#fme').form('load', {
                cedula: row.estCedula,
                nombre: row.estNombre,
                apellido: row.estApellido,
                telefono: row.estTelefono,
                direccion: row.estDireccion,
                cuID: row.curId
            });

            // Cargar datos en el combobox
            $('#cuID').combobox('reload', 'models/selectCUID.php'); // Recargar el combobox con los datos actualizados

            url = 'models/actualizar.php';
        }
    }
    function saveUser() {
        $('#fm').form('submit', {
            url: url,
            iframe: false,
            onSubmit: function () {
                return $(this).form('validate');
            },
            success: function (result) {
                try {
                    var jsonResult = JSON.parse(result);
                    if (jsonResult.errorMsg) {
                        $.messager.show({
                            title: 'Error',
                            msg: jsonResult.errorMsg
                        });
                    } else {
                        $('#dlg').dialog('close'); // close the dialog
                        $('#dg').datagrid('reload'); // reload the user data
                    }
                } catch (e) {
                    // Handle non-JSON response
                    if (result.includes('Registro guardado')) {
                        $('#dlg').dialog('close'); // close the dialog
                        $('#dg').datagrid('reload'); // reload the user data
                    } else {
                        console.error('Invalid JSON response', e);
                        $.messager.show({
                            title: 'Error',
                            msg: 'Invalid response from server.'
                        });
                    }
                }
            }
        });
    }
    function updateUser() {
        $('#fme').form('submit', {
            url: url,
            iframe: false,
            onSubmit: function () {
                return $(this).form('validate');
            },
            success: function (result) {
                try {
                    var jsonResult = JSON.parse(result);
                    if (jsonResult.errorMsg) {
                        $.messager.show({
                            title: 'Error',
                            msg: jsonResult.errorMsg
                        });
                    } else {
                        $('#dlge').dialog('close'); // close the dialog
                        $('#dg').datagrid('reload'); // reload the user data
                    }
                } catch (e) {
                    // Handle non-JSON response
                    if (result.includes('Registro actualizado')) {
                        $('#dlge').dialog('close'); // close the dialog
                        $('#dg').datagrid('reload'); // reload the user data
                    } else {
                        console.error('Invalid JSON response', e);
                        $.messager.show({
                            title: 'Error',
                            msg: 'Invalid response from server.'
                        });
                    }
                }
            }
        });
    }
    function destroyUser() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $.messager.confirm('Confirm', '¿Seguro que desea eliminar este registro?', function (r) {
                if (r) {
                    $.post('models/borrar.php', { cedula: row.estCedula }, function (result) {
                        if (result.success) {
                            $('#dg').datagrid('reload');    // reload the user data
                        } else {
                            $.messager.show({    // show error message
                                title: 'Error',
                                msg: result.errorMsg
                            });
                        }
                    }, 'json');
                }
            });
        }
    }
    function reporteGeneral() {
        window.open('reports/reporte.php', '_blank');
    }
    function buscarEstCed() {
        var cedula = $('#cedula').textbox('getValue');
        console.log('Cedula:', cedula); // Verificar en la consola

        $.post('models/selectEstCed.php', { cedula: cedula }, function (result) {
            console.log('Result:', result); // Verificar la respuesta del servidor
            if (result.success) {
                window.open('reports/parameterReport.php', '_blank'); // Abrir la página del informe
            } else {
                $.messager.show({
                    title: 'Error',
                    msg: result.errorMsg
                });
            }
        }, 'json');
    }
    function reporteGeneral2() {
    $.get('reports/reporteGeneral.php', function(data) {
        if (data.includes("Report generated successfully")) {
            window.open('reports/general_report.pdf', '_blank'); // Adjust the path as needed
        } else {
            $.messager.show({
                title: 'Error',
                msg: 'Error generating report: ' + data
            });
        }
    });
}
</script>