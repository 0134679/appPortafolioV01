import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AdministrarClientePageRoutingModule } from './administrar-cliente-routing.module';

import { AdministrarClientePage } from './administrar-cliente.page';



@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AdministrarClientePageRoutingModule
  ],
  declarations: [AdministrarClientePage]
})
export class AdministrarClientePageModule {}
