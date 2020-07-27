import { Component, OnInit } from '@angular/core';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import { TambahDataComponent } from '../tambah-data/tambah-data.component';
import {ApiService} from '../api.service'; //kode tambahan

@Component({
  selector: 'app-tamu',
  templateUrl: './tamu.component.html',
  styleUrls: ['./tamu.component.css']
})
export class TamuComponent implements OnInit {

  constructor(
    public dialog:MatDialog,
    public api:ApiService
  ) { 
    this.getData()
  }

  dataTamu: any =[]
  getData()
	{
		this.api.status().subscribe(res=>{
			this.dataTamu = res
		})
  }
  
  ngOnInit(): void {
  }

  buatTamu()
  {
		const dialogRef = this.dialog.open(TambahDataComponent, {
			width: '450px',      
		});
		dialogRef.afterClosed().subscribe(result => {
			console.log('Dialog ditutup');     
		});
  	}

}
