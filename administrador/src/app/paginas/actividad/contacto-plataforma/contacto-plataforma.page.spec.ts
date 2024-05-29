import { ComponentFixture, TestBed } from '@angular/core/testing';
import { ContactoPlataformaPage } from './contacto-plataforma.page';

describe('ContactoPlataformaPage', () => {
  let component: ContactoPlataformaPage;
  let fixture: ComponentFixture<ContactoPlataformaPage>;

  beforeEach(() => {
    fixture = TestBed.createComponent(ContactoPlataformaPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
