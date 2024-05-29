import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';

@Component({
  selector: 'app-lista-usuario',
  templateUrl: './lista-usuario.page.html',
  styleUrls: ['./lista-usuario.page.scss'],
})
export class ListaUsuarioPage {
  userVendedor: any[] = []; // Inicializa user como un array vacío
  userCliente: any[] = [];

  constructor(private http: HttpClient) { }

  listaCliente() {
    this.http.get('http://localhost/listaCliente.php', { responseType: 'text' }).subscribe(
      (response) => {
        // Eliminar el mensaje "Conectado!!" de la respuesta
        const cleanResponse = response.replace('Conectado!!... Entregando Datos => ', '');
  
        try {
          // Analizar la respuesta limpia como JSON
          const userData = JSON.parse(cleanResponse);
  
          // Asignar los datos de usuario a la variable user
          this.userCliente = userData;
        } catch (error) {
          console.error('Error al analizar la respuesta del servidor:', error);
        }
      },
      (error) => {
        console.error('Error al obtener la lista de clientes:', error);
      }
    );
  }

  listaVendedor() {
    this.http.get('http://localhost/listaVendedor.php', { responseType: 'text' }).subscribe(
      (response) => {
        // Eliminar el mensaje "Conectado!!" de la respuesta
        const cleanResponse = response.replace('Conectado!!... Entregando Datos => ', '');
  
        try {
          // Analizar la respuesta limpia como JSON
          const userData = JSON.parse(cleanResponse);
  
          // Asignar los datos de usuario a la variable user
          this.userVendedor = userData;
        } catch (error) {
          console.error('Error al analizar la respuesta del servidor:', error);
        }
      },
      (error) => {
        console.error('Error al obtener la lista de clientes:', error);
      }
    );
  }
}