import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-home',
  templateUrl: './home.page.html',
  styleUrls: ['./home.page.scss'],
})
export class HomePage implements OnInit {

  noticias: any = [];

  constructor(private http: HttpClient, private router: Router) { }

  ngOnInit() {
    // Llamada a la función para cargar las noticias al iniciar la página
    this.noticia();
  }

  getRutCliente() {
    return this.http.get<{ nombre_cliente: string }>('http://localhost/dataCliente.php');
  }

  async canDismiss(data?: any, role?: string) {
    return role !== 'gesture';
  }

  handleRefresh(event: { target: { complete: () => void; }; }) {
    setTimeout(() => {
      // Any calls to load data go here
      event.target.complete();
    }, 2000);
  }

  noticia() {
    // Realizar la solicitud HTTP para obtener los datos del usuario
    this.http.get('http://localhost/obtenerPosts.php').subscribe((Response) => {
      this.noticias = Response;
    });
  }
}
