const int flowPin = 4;
const int flowPin1 = 2;  // Flow sensor pin
const int relay = 15;
const int relay1 = 19;
volatile int pulseCount = 0;
float flowRate = 0;
unsigned int flowMilliLitres = 0;
float totalMilliLitres = 0;
unsigned long oldTime = 0;
unsigned long currentTime;


volatile int pulseCount1 = 0;
float flowRate1 = 0;
unsigned int flowMilliLitres1 = 0;
float totalMilliLitres1 = 0;
unsigned long oldTime1 = 0;
unsigned long currentTime1;

const int out=18;
const int in=5;
int no_of_houses=5;
float water_for_each_house;

void setup(){
  Serial.begin(9600);
  pinMode(in, INPUT);
  pinMode(out, OUTPUT);
  pinMode(flowPin, INPUT_PULLUP);
  pinMode(flowPin1, INPUT_PULLUP);
  pinMode(relay, OUTPUT);
  pinMode(relay1, OUTPUT);
  attachInterrupt(digitalPinToInterrupt(flowPin), pulseCounter, FALLING);
  attachInterrupt(digitalPinToInterrupt(flowPin1), pulseCounter1, FALLING);

float dur;
float dis;
float tocm;
float volume;
float volume_max;
int total_height=24;
int radius=10;
float filled;
float volume_lt;
float volume_lt1;
digitalWrite(out,LOW);
delayMicroseconds(2);
digitalWrite(out,HIGH);
delayMicroseconds(10);
digitalWrite(out,LOW);
dur=pulseIn(in,HIGH);
tocm=microsecondsToCentimeters(dur);
//Serial.println(String(tocm));
delay(100);
filled= total_height - tocm;
volume=3.14*radius*radius*filled;
volume_lt=volume/1000;
volume_max=3.14*radius*radius*total_height;
volume_lt1=volume_max/1000;
Serial.print("Total water present in the tank(in litre) : ");
Serial.println(String(volume_lt));
Serial.print("Maximum water can be filled tank(in litre): ");
Serial.println(String(volume_lt1));


water_for_each_house=volume_lt/no_of_houses;
Serial.print("Quantity of water for each house is:");
Serial.println(String(water_for_each_house));
}

void loop() {
  float dur;
  float dis;
  float tocm;
  float volume;
  float volume_max;
 
  int total_height=24;
  int radius=10;
  float filled;
  float volume_lt;
  float volume_lt1;
  float max_volume_lt;
  digitalWrite(out,LOW);
  delayMicroseconds(2);
  digitalWrite(out,HIGH);
  delayMicroseconds(10);
  digitalWrite(out,LOW);
  dur=pulseIn(in,HIGH);
  tocm=microsecondsToCentimeters(dur);
  //Serial.println(String(tocm));
  delay(100);
  filled= total_height - tocm;
  volume=3.14*radius*radius*filled;
  volume_lt=volume/1000;
  volume_max=3.14*radius*radius*total_height;
  volume_lt1=volume_max/1000;
  Serial.print("water filled :");
  Serial.println(String(volume_lt));
  Serial.print("Maximum water:");
  Serial.println(String(volume_lt1));

int remainder=volume_lt1 - volume_lt ;
 if((remainder)<3){
  Serial.print("Water Overflow!!");
 }
  if(volume_lt < 3){
  Serial.print("Water Drying!!!!");
 }



  
 
  currentTime = millis();
  if ((currentTime - oldTime) > 1000) { // Only process counters once per second
    detachInterrupt(digitalPinToInterrupt(flowPin));
    flowRate = (1000.0 / (currentTime - oldTime)) * pulseCount / 7.5; // L/s
    flowMilliLitres = (flowRate / 60) * 1000; // mL/s
    totalMilliLitres += flowMilliLitres;
    totalMilliLitres;
    oldTime = currentTime;
    pulseCount = 0;
    attachInterrupt(digitalPinToInterrupt(flowPin), pulseCounter, FALLING);
    delay(1000);
    Serial.print("Flow rate: ");
    Serial.print(flowRate);
    Serial.print(" L/s");
    Serial.print("\t");
    Serial.print("Total volume: ");
    Serial.print(totalMilliLitres/1000);
    Serial.println(" L");
  }




    currentTime1 = millis();
  if ((currentTime1 - oldTime1) > 1000) { // Only process counters once per second
    detachInterrupt(digitalPinToInterrupt(flowPin1));
    flowRate1 = (1000.0 / (currentTime1 - oldTime1)) * pulseCount1 / 7.5; // L/s
    flowMilliLitres1 = (flowRate1 / 60) * 1000; // mL/s
    totalMilliLitres1 += flowMilliLitres1;
    totalMilliLitres1;
    oldTime1 = currentTime1;
    pulseCount1 = 0;
    attachInterrupt(digitalPinToInterrupt(flowPin1), pulseCounter1, FALLING);
    delay(1000);
    Serial.print("Flow rate1: ");
    Serial.print(flowRate1);
    Serial.print(" L/s");
    Serial.print("\t");
    Serial.print("Total volume1: ");
    Serial.print(totalMilliLitres1/1000);
    Serial.println(" L");
  }



 
  digitalWrite(relay, HIGH);
  digitalWrite(relay1, HIGH);

  if ((totalMilliLitres/1000 ) >= water_for_each_house){
   digitalWrite(relay, LOW);
  }
  if ((totalMilliLitres1/1000 ) >= water_for_each_house){
   digitalWrite(relay1, LOW);
  }
}

void pulseCounter() {
  pulseCount++;
}
void pulseCounter1() {
  pulseCount1++;
}
long microsecondsToCentimeters(long microseconds)
{
return microseconds / 29 / 2;
}
