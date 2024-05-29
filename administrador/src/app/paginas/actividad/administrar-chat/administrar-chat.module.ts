import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AdministrarChatPageRoutingModule } from './administrar-chat-routing.module';

import { AdministrarChatPage } from './administrar-chat.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AdministrarChatPageRoutingModule
  ],
  declarations: [AdministrarChatPage]
})
export class AdministrarChatPageModule {}
