import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TamuComponent } from './tamu.component';

describe('TamuComponent', () => {
  let component: TamuComponent;
  let fixture: ComponentFixture<TamuComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TamuComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TamuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
