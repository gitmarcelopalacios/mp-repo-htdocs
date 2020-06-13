int rojo1 = 13;
int amarillo1 = 12;
int verde1 = 11;
int rojo2 = 4;
int amarillo2 = 3;
int verde2 = 2;

void setup() {
}

void loop() {

  prender(verde2);
  prender(amarillo2);
  prender(rojo2);
  prender(verde1);
  prender(amarillo1);
  prender(rojo1);
  
}
  
void prender(int un_color){
	digitalWrite(un_color, HIGH);
    delay(2000);
    digitalWrite(un_color, LOW);
}

