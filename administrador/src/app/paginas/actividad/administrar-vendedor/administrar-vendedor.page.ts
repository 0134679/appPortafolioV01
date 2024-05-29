import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AlertController } from '@ionic/angular';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-administrar-vendedor',
  templateUrl: './administrar-vendedor.page.html',
  styleUrls: ['./administrar-vendedor.page.scss'],
})
export class AdministrarVendedorPage implements OnInit {

  vendedor = {
    nombre: '',
    rut: '',
    contrasena: '',
    contrasena2: '',
    email: '',
    nombreNegocio: '',
    rutNegocio: ''
  };

  habilitarModificacion = false;
  habilitarModificacionNegocio = false;

  constructor(private alertController: AlertController, private router: Router, private http: HttpClient) {}
  ngOnInit() {
  }
  modificarVendedor() {
    if (this.habilitarModificacion) {
      this.http.post('ruta_a_tu_backend.php', this.vendedor)
        .subscribe(response => {
          console.log('Vendedor modificado', response);
        }, error => {
          console.error('Error modificando vendedor', error);
        });
    }
  }

  eliminarVendedor() {
    const { rut } = this.vendedor;
    this.http.post('http://localhost/modificarVendedor.php', { rut, accion: 'eliminar' })
      .subscribe(response => {
        console.log('Vendedor eliminado', response);
      }, error => {
        console.error('Error eliminando vendedor', error);
      });
  }

  bloquearVendedor() {
    const { rut } = this.vendedor;
    this.http.post('http://localhost/modificarVendedor.php', { rut, accion: 'bloquear' })
      .subscribe(response => {
        console.log('Vendedor bloqueado', response);
      }, error => {
        console.error('Error bloqueando vendedor', error);
      });
  }


  bloquearNegocio(){

  }

  modificarNegocio(){

  }
}
