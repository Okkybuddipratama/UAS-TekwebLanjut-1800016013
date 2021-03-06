import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { MaterialDesign } from './material/material';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginComponent } from './login/login.component';
import { TamuComponent } from './tamu/tamu.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { FormsModule } from '@angular/forms';
import { TambahDataComponent } from './tambah-data/tambah-data.component'
import { HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    TamuComponent,
    TambahDataComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    MaterialDesign,
    FormsModule,
    HttpClientModule //tambahan modul baru
  ],
  entryComponents: [
    TambahDataComponent
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
