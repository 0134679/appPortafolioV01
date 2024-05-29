import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { GestionPostPageRoutingModule } from './gestion-post-routing.module';

import { GestionPostPage } from './gestion-post.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    GestionPostPageRoutingModule
  ],
  declarations: [GestionPostPage]
})
export class GestionPostPageModule {}
