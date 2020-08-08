// creo una variable con el color del led
// y como valor tiene el valor del pin en que se conecta

int rojo = 13;
int amarillo = 12;
int verde = 11;

void setup()
{
  // defino el pin de los led para salida
  pinMode(rojo, OUTPUT);
  pinMode(amarillo, OUTPUT);
  pinMode(verde, OUTPUT);
  
}

void loop()
{
   prende_el(verde);
   prende_el(amarillo);
   prende_el(rojo);

}

void prende_el(int color) {
  digitalWrite(color, HIGH);
  delay(1000); 
  digitalWrite(color, LOW);
  delay(1000); 
}