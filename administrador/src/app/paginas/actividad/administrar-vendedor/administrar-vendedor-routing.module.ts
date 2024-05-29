import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AdministrarVendedorPage } from './administrar-vendedor.page';

const routes: Routes = [
  {
    path: '',
    component: AdministrarVendedorPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AdministrarVendedorPageRoutingModule {}
