import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { BodegaNegocioPage } from './bodega-negocio.page';

const routes: Routes = [
  {
    path: '',
    component: BodegaNegocioPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class BodegaNegocioPageRoutingModule {}
