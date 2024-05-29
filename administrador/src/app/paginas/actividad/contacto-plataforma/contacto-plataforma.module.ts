import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { ContactoPlataformaPageRoutingModule } from './contacto-plataforma-routing.module';

import { ContactoPlataformaPage } from './contacto-plataforma.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ContactoPlataformaPageRoutingModule
  ],
  declarations: [ContactoPlataformaPage]
})
export class ContactoPlataformaPageModule {}
