import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AlertController } from '@ionic/angular';

@Component({
  selector: 'app-administrar-cliente',
  templateUrl: './administrar-cliente.page.html',
  styleUrls: ['./administrar-cliente.page.scss'],
})
export class AdministrarClientePage implements OnInit {

  habilitarModificacion: boolean = false;

   cliente = {
    nombre: '',
    rut: '',
    contrasena: '',
    contrasena2: '',
    email: ''
  };
  constructor(private router: Router, private alertController: AlertController) { }

  ngOnInit() {
  }

  eliminarCliente() {
    this.showConfirmationAlert('Eliminar Cliente', '¿Está seguro que desea eliminar este cliente?', () => {
      // Lógica para eliminar el cliente
      console.log('Cliente eliminado');
      // Redirigir a otra página si es necesario
      this.router.navigate(['/login-cliente']);
    });
  }

  bloquearCliente() {
    this.showConfirmationAlert('Bloquear Cliente', '¿Está seguro que desea bloquear el acceso de este cliente?', () => {
      // Lógica para bloquear el acceso del cliente
      console.log('Cliente bloqueado');
    });
  }

  modificarCliente() {
    // Lógica para modificar el cliente
    if (this.cliente.contrasena !== this.cliente.contrasena2) {
      this.showAlert('Error', 'Las contraseñas no coinciden');
      return;
    }
    console.log('Cliente modificado', this.cliente);
    // Aquí se debería llamar a un servicio para guardar los cambios
  }

  async showConfirmationAlert(header: string, message: string, confirmHandler: () => void) {
    const alert = await this.alertController.create({
      header,
      message,
      buttons: [
        {
          text: 'Cancelar',
          role: 'cancel',
          handler: () => {
            console.log('Acción cancelada');
          }
        },
        {
          text: 'Aceptar',
          handler: confirmHandler
        }
      ]
    });

    await alert.present();
  }

  async showAlert(header: string, message: string) {
    const alert = await this.alertController.create({
      header,
      message,
      buttons: ['OK']
    });

    await alert.present();
  }
}
