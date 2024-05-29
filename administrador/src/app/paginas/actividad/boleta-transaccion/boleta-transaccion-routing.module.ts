import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { BoletaTransaccionPage } from './boleta-transaccion.page';

const routes: Routes = [
  {
    path: '',
    component: BoletaTransaccionPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class BoletaTransaccionPageRoutingModule {}
