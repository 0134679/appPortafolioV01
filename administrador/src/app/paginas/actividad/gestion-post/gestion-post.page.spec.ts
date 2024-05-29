import { ComponentFixture, TestBed } from '@angular/core/testing';
import { GestionPostPage } from './gestion-post.page';

describe('GestionPostPage', () => {
  let component: GestionPostPage;
  let fixture: ComponentFixture<GestionPostPage>;

  beforeEach(() => {
    fixture = TestBed.createComponent(GestionPostPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
