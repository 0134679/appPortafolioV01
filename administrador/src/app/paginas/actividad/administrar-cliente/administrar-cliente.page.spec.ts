import { ComponentFixture, TestBed } from '@angular/core/testing';
import { AdministrarClientePage } from './administrar-cliente.page';

describe('AdministrarClientePage', () => {
  let component: AdministrarClientePage;
  let fixture: ComponentFixture<AdministrarClientePage>;

  beforeEach(() => {
    fixture = TestBed.createComponent(AdministrarClientePage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
