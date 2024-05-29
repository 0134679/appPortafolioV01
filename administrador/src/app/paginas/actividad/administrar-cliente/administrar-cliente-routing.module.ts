import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AdministrarClientePage } from './administrar-cliente.page';

const routes: Routes = [
  {
    path: '',
    component: AdministrarClientePage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AdministrarClientePageRoutingModule {}
