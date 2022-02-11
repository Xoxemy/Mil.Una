import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class OfertasTrabajoService {
  private urlApi = '/api/empleo/obtenerTodos'
  constructor(private http: HttpClient) { }

  getAllOfertasTrabajo():Observable<any>{
    return this.http.get(this.urlApi)
  }
}
