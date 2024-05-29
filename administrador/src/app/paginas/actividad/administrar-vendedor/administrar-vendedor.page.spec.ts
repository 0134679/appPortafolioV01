import { ComponentFixture, TestBed } from '@angular/core/testing';
import { AdministrarVendedorPage } from './administrar-vendedor.page';

describe('AdministrarVendedorPage', () => {
  let component: AdministrarVendedorPage;
  let fixture: ComponentFixture<AdministrarVendedorPage>;

  beforeEach(() => {
    fixture = TestBed.createComponent(AdministrarVendedorPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
