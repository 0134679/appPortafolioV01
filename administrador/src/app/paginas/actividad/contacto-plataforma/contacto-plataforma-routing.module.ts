import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { ContactoPlataformaPage } from './contacto-plataforma.page';

const routes: Routes = [
  {
    path: '',
    component: ContactoPlataformaPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ContactoPlataformaPageRoutingModule {}
