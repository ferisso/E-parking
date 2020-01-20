#include <SPI.h>
#include <Ethernet.h>
#include <Servo.h> 
Servo myservo;  // cria objeto para controlar servo
Servo myservo2;  // cria objeto para controlar servo


byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
byte ip[] = { 192, 168, 1, 150 }; // ip lan
EthernetServer server(80);      
String readString; 


void setup(){

  pinMode(5, OUTPUT); //seleciona pin para controlar
  myservo.attach(6);  //pin do servo

  pinMode(4, OUTPUT); //seleciona pin para control
  myservo2.attach(3);  //pin do servo
  
  Ethernet.begin(mac, ip);
  server.begin();
  
  Serial.begin(9600); 
  Serial.println("server servo/pin 5 test 1.0");
}

void loop(){
  // Cria conexao cliente
  EthernetClient client = server.available();
  if (client) {
    while (client.connected()) {
      if (client.available()) {
        char c = client.read();

        
        if (readString.length() < 100) {

          readString += c; 
          //Serial.print(c);
        } 

        if (c == '\n') {

          ///////////////
          Serial.println(readString); //Imprime na serial 

          client.println("HTTP/1.1 200 OK"); //envia nova pagina
          client.println("Content-Type: text/html");
          client.println();

          client.println("<HTML>");
          client.println("<HEAD>");
          client.println("<TITLE>E-Parking</TITLE>");
          client.println("</HEAD>");
          client.println("<BODY>");
          client.println("<br>");
          client.println("<br>");
          client.println("<br>");
          client.println("<br>");
          client.println("<br>");
          client.println("<br>");
          client.println("<br>");
          client.println("<br>");
          client.println("<br>");
          client.println("<br>");
          client.println("<br>");
          client.println("<br>");
          client.println("<center><h1><p style=font-family:Sans-serif; >OBRIGADO POR UTILIZAR O E-PARKING</p></h1></center>");
          client.println("<center><H2><p style=font-family:Sans-serif;>Clique em iniciar para inserir o PIN</p></H2></center>");
          client.println("<br>");
          client.println("<center><h3><a style=background-color:blue;color:white;padding:14px 70px;text-align:center;text-decoration:none;display:inline-block; href=\"https://192.168.1.100/site/arduino.php\"\">Iniciar</a></h3></center>"); 
           

          client.println("</BODY>");
          client.println("</HTML>");
 
          delay(1);
          
          client.stop();

          
          if(readString.indexOf("?on") >0)
          {
            myservo.write(10);
            digitalWrite(5, HIGH);
            Serial.println("Led On");
            delay(3500);
            myservo.write(110);
            digitalWrite(5, LOW);
            Serial.println("Led Off");
            
            
          }
          
          //limpa string para proxima leitura
          readString="";

        }
      }
    }
  }
  
 EthernetClient client2 = server.available();
  if (client2) {
    while (client2.connected()) {
      if (client2.available()) {
        char c = client2.read();

        
        if (readString.length() < 100) {

          readString += c; 
          //Serial.print(c);
        } 

        if (c == '\n') {

          ///////////////
          Serial.println(readString); //Imprime na serial 

          client2.println("HTTP/1.1 200 OK"); //envia nova pagina
          client2.println("Content-Type: text/html");
          client2.println();

          client2.println("<HTML>");
          client2.println("<HEAD>");
          client2.println("<TITLE>E-Parking</TITLE>");
          client2.println("</HEAD>");
          client2.println("<BODY>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<br>");
          client2.println("<center><h1><p style=font-family:Sans-serif; >OBRIGADO POR UTILIZAR O E-PARKING</p></h1></center>");
          client2.println("<center><H2><p style=font-family:Sans-serif;>Clique em iniciar para inserir o PIN</p></H2></center>");
          client2.println("<br>");
          client2.println("<center><h3><a style=background-color:blue;color:white;padding:14px 70px;text-align:center;text-decoration:none;display:inline-block; href=\"https://192.168.1.100/site/arduino.php\"\">Iniciar</a></h3></center>"); 
           

          client2.println("</BODY>");
          client2.println("</HTML>");
 
          delay(1);
          
          client2.stop();

          
          if(readString.indexOf("?off") >0)
          {
            myservo2.write(10);
            digitalWrite(3, HIGH);
            Serial.println("Led On");
            delay(3500);
            myservo2.write(110);
            digitalWrite(3, LOW);
            Serial.println("Led Off");
            
            
          }
          
          //limpa string para proxima leitura
          readString="";

        }
      }
    }
  }

  
} 
