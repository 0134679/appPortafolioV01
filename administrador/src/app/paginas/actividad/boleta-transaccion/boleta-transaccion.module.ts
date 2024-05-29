import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { BoletaTransaccionPageRoutingModule } from './boleta-transaccion-routing.module';

import { BoletaTransaccionPage } from './boleta-transaccion.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    BoletaTransaccionPageRoutingModule
  ],
  declarations: [BoletaTransaccionPage]
})
export class BoletaTransaccionPageModule {}
