void setup()
{
 pinMode(13, OUTPUT);
 Serial.begin(9600); 
}


void saludo(String x){
	Serial.println("Hola como te va "+x);
}


void loop()
{
  saludo("pipo");
  saludo("pepe");
}


