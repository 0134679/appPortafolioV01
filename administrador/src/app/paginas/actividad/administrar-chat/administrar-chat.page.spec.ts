import { ComponentFixture, TestBed } from '@angular/core/testing';
import { AdministrarChatPage } from './administrar-chat.page';

describe('AdministrarChatPage', () => {
  let component: AdministrarChatPage;
  let fixture: ComponentFixture<AdministrarChatPage>;

  beforeEach(() => {
    fixture = TestBed.createComponent(AdministrarChatPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
