import { ComponentFixture, TestBed } from '@angular/core/testing';
import { BoletaTransaccionPage } from './boleta-transaccion.page';

describe('BoletaTransaccionPage', () => {
  let component: BoletaTransaccionPage;
  let fixture: ComponentFixture<BoletaTransaccionPage>;

  beforeEach(() => {
    fixture = TestBed.createComponent(BoletaTransaccionPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
