  

void setup() {

pinMode(6, OUTPUT);
pinMode(7, OUTPUT);
pinMode(8, OUTPUT);
pinMode(9, OUTPUT);

}

void loop() 
{

  for(int i=0;i<7;i++)
  { 
    digitalWrite(6,HIGH);
    digitalWrite(7,HIGH);

    digitalWrite(8,LOW);
    digitalWrite(9,LOW);

    delay(100);


    digitalWrite(8,HIGH);
    digitalWrite(9,HIGH);

    digitalWrite(6,LOW);
    digitalWrite(7,LOW);

    delay(100);
  }

  digitalWrite(8,LOW);
  digitalWrite(9,LOW);

  //Segunda parte

  for(int i=0;i<5;i++)
  {

    for(int b=0;b<5;b++)
    {
      digitalWrite(6,HIGH);
      digitalWrite(7,HIGH);

      delay(50);

      digitalWrite(6,LOW);
      digitalWrite(7,LOW);
      delay(50);
    }

    for(int b=0;b<5;b++)
    {
      digitalWrite(8,HIGH);
      digitalWrite(9,HIGH);

      delay(50);

      digitalWrite(8,LOW);
      digitalWrite(9,LOW);
      delay(50);
    }
  }
}