// despliega los datos del DISTRIBUIDOR
$(document).ready(function(){
        $.ajax({
            type:'POST',
            url:'../php/buscarSeguimiento-Distribuidor.php',
            data: {'busqueda': 'busqueda'}
        })
        .done(function(res)
        {
            $('#selectorDistr').html(res)
        })
        .fail(function(){
            alert("error")
        })
})

// llamada a creación de INDICADORES
$(document).ready(function(){
    $.ajax({
        type:'POST',
        url:'../php/resumenIndicadores.php',
        data: {'peticion': 'peticion'}
    })
    .done(function(res){
        $('#indicadores').html(res)
    })
    .fail(function(){
        alert("error")
    })
})

// llamada a creación de GRÁFICAS
$(document).ready(function(){
    $('#a01a02z').change(function(){
        var dat = $('#a01a02z').val();
        var a01 = dat.slice(0, 4);
        var a02 = dat.slice(5, 10);
        var z = dat.slice(11);
        var c01 = $('#c01').val();
        var c02 = $('#c02').val();
        var status = $('#status').val();
        var combo = a01.concat(a02, z, c01, c02, status); // crea un array [a01, a02, z]
        // if( ((combo[0])&&(combo[1])&&(combo[2])&&(combo[3])&&(combo[4])&&(combo[5]))!=null )
        if( ((combo[0])&&(combo[1])&&(combo[2]))!=null )
        {
            $.ajax({
                type:'POST',
                url:'../php/resumenGraficas.php',
                // data: {'peticion': 'peticion'}
                data: {'data':JSON.stringify(combo)}
            })
            .done(function(res){
                $('#g22').html(res)
            })
            .fail(function(){
                alert("error")
            })
        }
    })
    $('#btnVolver').click(function(){
    location.href="../html/panelAdmin.php";
    });
    $('#btnSalir').click(function(){
        location.href="../../acceso/php/logout.php";
    });
})