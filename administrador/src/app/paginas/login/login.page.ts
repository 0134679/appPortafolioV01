import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage {
  password!: string;
  rut!: string;

  constructor(private http: HttpClient, private router: Router) { }

  login() {
    this.http.get('http://localhost/dataAdmin.php', { responseType: 'text' }).subscribe(
      (response) => {
        const cleanResponse = response.replace('Conectado!!... Entregando Datos =>', '');
        try {
          const userData = JSON.parse(cleanResponse);
          if (userData && userData.length > 0) {
            const usuario = userData.find((user: { rut_admin: string; password: string; }) => user.rut_admin === this.rut && user.password === this.password);
            if (usuario) {
              this.router.navigate(['/home']);
            } else {
              console.error('Credenciales incorrectas');
            }
          } else {
            console.error('No se pudieron obtener los datos del usuario');
          }
        } catch (error) {
          console.error('Error al analizar la respuesta del servidor:', error);
        }
      },
      (error) => {

        console.error('Error al obtener los datos del usuario:', error);
      }
    );
  }
}
