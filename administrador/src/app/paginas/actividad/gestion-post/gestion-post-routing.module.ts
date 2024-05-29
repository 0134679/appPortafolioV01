import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { GestionPostPage } from './gestion-post.page';

const routes: Routes = [
  {
    path: '',
    component: GestionPostPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class GestionPostPageRoutingModule {}
