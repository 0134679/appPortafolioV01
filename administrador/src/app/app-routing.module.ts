import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    redirectTo: 'carga',
    pathMatch: 'full'
  },
  {
    path: 'intro',
    loadChildren: () => import('./paginas/intro/intro.module').then( m => m.IntroPageModule)
  },
  {
    path: 'login',
    loadChildren: () => import('./paginas/login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: 'home',
    loadChildren: () => import('./paginas/home/home.module').then( m => m.HomePageModule)
  },
  {
    path: 'carga',
    loadChildren: () => import('./paginas/carga/carga.module').then( m => m.CargaPageModule)
  },
  {
    path: 'administrar-cliente',
    loadChildren: () => import('./paginas/actividad/administrar-cliente/administrar-cliente.module').then( m => m.AdministrarClientePageModule)
  },
  {
    path: 'administrar-vendedor',
    loadChildren: () => import('./paginas/actividad/administrar-vendedor/administrar-vendedor.module').then( m => m.AdministrarVendedorPageModule)
  },
  {
    path: 'gestion-post',
    loadChildren: () => import('./paginas/actividad/gestion-post/gestion-post.module').then( m => m.GestionPostPageModule)
  },
  {
    path: 'administrar-chat',
    loadChildren: () => import('./paginas/actividad/administrar-chat/administrar-chat.module').then( m => m.AdministrarChatPageModule)
  },
  {
    path: 'contacto-plataforma',
    loadChildren: () => import('./paginas/actividad/contacto-plataforma/contacto-plataforma.module').then( m => m.ContactoPlataformaPageModule)
  },
  {
    path: 'boleta-transaccion',
    loadChildren: () => import('./paginas/actividad/boleta-transaccion/boleta-transaccion.module').then( m => m.BoletaTransaccionPageModule)
  },
  {
    path: 'documentos',
    loadChildren: () => import('./paginas/documentos/documentos.module').then( m => m.DocumentosPageModule)
  },
  {
    path: 'lista-usuario',
    loadChildren: () => import('./paginas/lista-usuario/lista-usuario.module').then( m => m.ListaUsuarioPageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
