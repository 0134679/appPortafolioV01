import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AdministrarChatPage } from './administrar-chat.page';

const routes: Routes = [
  {
    path: '',
    component: AdministrarChatPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AdministrarChatPageRoutingModule {}
