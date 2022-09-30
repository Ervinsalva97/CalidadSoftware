//creamos un arreglo

let vendedor=[];
var vendedorSeleccionado;

//todas las peticiones Ajax apuntan a la misma url
const url = '/api/vendedor.php';

function obtenerVendedores() {
    //petición Asincrona
    axios({
        method:'GET', 
        url:url,
        responseType: 'json'
        }).then(res=>{
                //aqui carga los datos
                console.log(res.data);
                this.vendedor=res.data;
                llenarTabla();
        }).catch(error=>{
                //si hubiera error lo imprimes en la consola
                console.error(error);
        });
}
obtenerVendedores();

function llenarTabla(){
  for(let i=0;i<vendedor.length;i++){
      document.querySelector('#tabla-vendedor tbody').innerHTML +=
        `<tr>
             <td>${vendedor[i].nombre}</td>
             <td>${vendedor[i].apellido}</td>
             <td>${vendedor[i].telefono}</td>
             <td>${vendedor[i].correo}</td>
             <td>${vendedor[i].usuario}</td>
             <td>${vendedor[i].contraseña}</td>
             <td>
                 <button type="button" onclick="eliminar(${i})" class="btn btn-danger" >Eliminar</button>
                 <button type="button" onclick="seleccionar(${i})" class="btn btn-warning">Editar</button>
             </td>
        </tr>`;	
    }
}

function eliminar(indice){
console.log('Eliminar el elemento con el indice '+indice);
    axios({
       method:'DELETE',
       url: url +  `?id=${indice}`,
       responseType:'json'
        }).then(res=>{
            //aqui carga los datos
            console.log(res.data);
            //this.usuarios=res.data;
            obtenerVendedores();
            }).catch(error=>{
                //si hubiera error lo imprimes en la consola
                console.error(error);
                });
}

function guardar(){
    //document.getElementById('btn-guardar').disabled = true;
    //document.getElementById('btn-guardar').innerHTML = 'Guardando...';
    let vendedor = {
         nombre: document.getElementById('nombre').value,
         apellido: document.getElementById('apellido').value,
         telefono:document.getElementById('telefono').value,
         correo:document.getElementById('correo').value,
         usuario:document.getElementById('usuario').value,
         contraseña:document.getElementById('contraseña').value
    };
        console.log('Usuario a guardar', vendedor);
      axios({
       method:'POST',
       url: url ,
       responseType:'json',
       data:vendedor
        }).then(res=>{
                //aqui carga los datos
                console.log(res.data);
                //this.usuarios=res.data;
                limpiar();
                obtenerVendedores();
                //document.getElementById('btn-guardar').disabled = false;
                //document.getElementById('btn-guardar').innerHTML = 'Guardar';
                }).catch(error=>{
                    //si hubiera error lo imprimes en la consola
                    console.error(error);
                });
}

function limpiar(){
   document.getElementById('nombre').value=null;
   document.getElementById('apellido').value=null;
   document.getElementById('telefono').value=null;
   document.getElementById('correo').value=null;
   document.getElementById('usuario').value=null;
   document.getElementById('contraseña').value=null;
   document.getElementById('btn-guardar').style.display='inline';
   document.getElementById('btn-actualizar').style.display='none';
}

function seleccionar(indice){
//consumir el servicio que nos retorna un usuario
vendedorSeleccionado= indice;
console.log('Se selecciono el elemento '+ indice);
    axios({
       method:'GET',
       url: url + `?id=${indice}`,
       responseType:'json'
    }).then(res=>{
        console.log(res.data);
        document.getElementById('nombre').value=res.data.nombre;
           document.getElementById('apellido').value=res.data.apellido;
           document.getElementById('fechaNacimiento').value=res.data.fechaNacimiento;
           document.getElementById('pais').value=res.data.pais;
           document.getElementById('btn-guardar').style.display='none';
           document.getElementById('btn-actualizar').style.display='inlinse';
    }).catch(error=>{
        console.error(error);
    });
}


