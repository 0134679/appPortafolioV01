import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';
import { HttpClientModule } from '@angular/common/http';

import { AdministrarVendedorPageRoutingModule } from './administrar-vendedor-routing.module';

import { AdministrarVendedorPage } from './administrar-vendedor.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AdministrarVendedorPageRoutingModule,
    HttpClientModule
  ],
  declarations: [AdministrarVendedorPage]
})
export class AdministrarVendedorPageModule {}
