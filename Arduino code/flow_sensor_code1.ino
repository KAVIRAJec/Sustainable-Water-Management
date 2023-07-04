float vol = 0.0,l_minute;
unsigned char flowsensor = 2; // Sensor Input
unsigned long currentTime;
unsigned long cloopTime;
unsigned long flow_frequency;
void flow () // Interrupt function to increment flow
{
   flow_frequency++;
}
void setup()
{
   Serial.begin(9600);
   pinMode(flowsensor, INPUT);
   digitalWrite(flowsensor, HIGH); // Optional Internal Pull-Up
   attachInterrupt(digitalPinToInterrupt(flowsensor), flow, RISING); // Setup Interrupt
   currentTime = millis();
   cloopTime = currentTime;
}

void loop ()
{
   currentTime = millis();
   if(currentTime >= (cloopTime + 1000))
   {
    cloopTime = currentTime; // Updates cloopTime
    if(flow_frequency != 0)
    {
       l_minute = (flow_frequency / 7.5); 
      Serial.print("Rate: ");
      Serial.print(l_minute);
      Serial.print(" L/M ");
      l_minute = l_minute/60;
      vol = vol +l_minute;
      Serial.print("Vol:");
      Serial.print(vol);
      Serial.println(" L");
      flow_frequency = 0; // Reset Counter
//      Serial.print(l_minute, DEC); // Print litres/hour
//      Serial.println(" L/Sec");
    }
    else {
      Serial.println(" flow rate = 0 ");
      Serial.print("Rate: ");
      Serial.print( flow_frequency );
      Serial.print(" L/M ");
      Serial.print("Vol:");
      Serial.print(vol);
      Serial.print(" L");
    }
   }
}
