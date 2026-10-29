<c><h1>OSI MODEL</h1></c>

<img width="385" height="499" alt="image" src="https://github.com/user-attachments/assets/ec988cd7-e1f9-4da3-aa51-3f30c0efb6d1" />

<h2>APPLICATION LAYER</h2>

serves as the interface between end-user software and the underlying network, enabling direct interaction with network services.
It does not refer to the application itself, but rather the protocols and mechanisms that allow applications like web browsers and email clients to communicate. 

some common protocols are HTTP, SMTP, FTP, and DNS.(these provide a stadardised rules for data exchange.

<h2>PRESENTATION LAYER</h2>

Receives data from application layer .
<br>
Performs three important tasks ---

1)Data translation 

2)Data compression / decompression
  - Can be lossy or lossless .
    (helps to reduce the time of data transmission and hence is useful in real time video and audio streaming .)
    Lossless compression removes only statistical redundancy, so the decompressed output is bit-for-bit identical to the input.
    (It is the portion of a message that is predictable from the rest and therefore carries no new information. )
    Lossy compression sacrifices less critical information (e.g., inaudible frequencies in MP3, imperceptible color details in JPEG) to achieve much higher compression ratios, and that              discarded data cannot be recovered after decompression.

3)Encryption/decryption 
 - ssl (secure socket layer) is used in presentation layer for data encryption and data decryption .

<h2> SESSION LAYER</h2>

Session layer is used in setting up and managing followed by termination of connections .
API's - a set of simple, well-defined commands that an application can "say" to the session layer, without needing to understand how the session layer actually does its job internally.
Here "say" is just a casual, informal way of meaning "issue" or "send" a command.
NetBIOS (Network Basic Input/Output System) is an API that lets applications on different computers in a LAN communicate with each other.

Just before a connection is established the server performs authentication .
If authentication is successful authorization is checked(to determine if the person has the permission to access a file ).

keeps a track of the files that are being downloaded .
if a web page contains text images etc these are stored as separate file in the server.
when a website is requested the server opens a different session to download both the files.( both file are received in same session one after another )

session layer keeps a track of the data packets during transmission (which file it belongs to , where is it going).

Our web browser performs all the functions of application , presentation and session layer.

<h2>TRANSPORT LAYER</h2>

Controls the reliability of communication through -
   - Segmentation
   - Flow control
   - Error control

In segmentation the data received from session layer in divided into smaller data packets (segments) and they are assigned sequence and source and destination port number.
port number helps to direct each segment to correct application.
sequence number helps to reassemble the data.

In flow control the transport layer controls the amount of data being transmitted.

In error control the transport layer uses automatic repeat request schemes to retransmit the lost or corrupted data .
A small bit called checksum is added to the data packets .
A checksum is a small number calculated from your data that acts as a fingerprint — if even one bit changes in transit, the fingerprint changes too.
A checksum detects errors in transmitted data.
Its key limitation is that A checksum detects errors but doesn't fix them or tell you which bits are wrong.  If a mismatch is found, the receiver simply discards the packet and (in TCP's case) asks for a retransmission.

protocols of transmission layer are TCP(transmission control protocol ) and UDP (user datagram protocol ).

transport layer performs two types of services - connectionless (done by UDP) and cconnection-oriented (done by tcp).
<img width="1274" height="932" alt="image" src="https://github.com/user-attachments/assets/bcc575ab-6fd3-4e82-bef9-ad7cffa86d32" />
<img width="1274" height="298" alt="image" src="https://github.com/user-attachments/assets/7db42f15-1663-4619-8ae1-e48f7c1e1dc6" />

<h2>NETWORK LAYER</h2>

network layer works for the transmission of the received data segments from one computer to the another located in different networks.
data units in the network layer is called packets . It is the layer where routers reside.

Functions of network layer are -

  - Logical addressing
  - Path determination
  - Routing
  - 
    
ip addressing done in network layer in called logical addressing.
senders and receivers ip addresses are assigned to each segment to form an ip packet, ip addresses are assigned to ensure that each data packet can reach the correct destination.

routing is a method of moving data packet from source to destination and based of the logical address format.

choosing the best possible path for data delivery from source to destination is called path determination.

<h2>DATA LINK LAYER</h2>

In data link layer mac addresses of sender and receiver is assigned to the data packet to form a frame.
<br>
<br>
<img width="550" height="304" alt="image" src="https://github.com/user-attachments/assets/20941046-a1d4-4699-b172-88af536bc15b" />

A MAC address is a unique 48-bit hardware ID (e.g., AA:BB:CC:DD:EE:FF) burned into a NIC by the manufacturer, used to identify a device on the local network .

Unlike an IP address which changes per network, a MAC address is fixed to the hardware — it's your device's fingerprint.
The Data Link Layer handles node-to-node delivery — moving data between two devices that are directly connected on the same network segment (e.g., your PC → the switch, or switch → router).

it helps upper layers of OSI model to access media using techniques such as framing.


<img width="1313" height="716" alt="image" src="https://github.com/user-attachments/assets/f84efd49-71f4-4da8-a0b0-80061c2fae71" />


  in the above image in the end of each network decapsulation and encapsulation takes place. 
  in the laptop connected in the end of network  2 after decapsulation data is transferred to its network layer.

  Data link layer also controls how data is placed and received from the media using media access control.

  Tail of each frame contains bits which are used to detect error in the received frame.

<h2>PHYSICAL LAYER</h2>


The Physical Layer converts digital bits into physical signals (voltage, light pulses, or radio waves) and transmits them across a medium like cable or air.

  <img width="919" height="719" alt="image" src="https://github.com/user-attachments/assets/3fe128b0-4e12-4524-90a5-to4225d07d5b81" />






  <h1>IP ADDRESS (INTERNET PROTOCOL ADDRESS)</h1>

  An IP address is a unique number assigned to every device connected to a network, so it can send and receive data.

  Two types of ip address are there -
   - IPv4 and
   - IPv6

     <h2>IPv4</h2>

     <img width="1318" height="628" alt="image" src="https://github.com/user-attachments/assets/7c4e2249-9b15-40e8-b013-3a79f93beaf0" />
     
     IPv4 is a 32 bit address.
     2^32 devices(nearly 4 billion) can be addressed using IPv4.

     <h2>IPv6</h2>

     <img width="1403" height="735" alt="image" src="https://github.com/user-attachments/assets/06c5edbb-8045-40e7-a0de-10d03f1138aa" />
     
     IPv6 is a 128 bit address.
     2^128 devices can be addressed using IPv6.

     IP address can be classified into dynamic and static.

     Dynamic
     -when we are connecting our device to internet our internet provider will assign our device with a unique ip address according to the availability from a range of ip address.
     -every time we connect to the internet the ip address keeps changing .

     Static
     -never change
     -serve as permanent ip addresses.

     these are used by DNS servers.
     



<h1>TCP - THREE-WAY HANDSHAKE</h1>

<img width="1119" height="536" alt="image" src="https://github.com/user-attachments/assets/6995dfc1-36a5-43bd-aa4d-4038eb2d6f78" />

SYN (Synchronize): A signal sent by the client to the server to initiate a connection. It tells the server, "I want to connect, and here is my starting sequence number."

ACK (Acknowledgment): A signal used to confirm receipt of a previous packet. It tells the sender, "I received your message, and here is the next sequence number I expect."

  
<h1>TCP/IP MODEL</h1>

<img width="950" height="833" alt="image" src="https://github.com/user-attachments/assets/62f32a43-36c7-47b2-8ccf-bf4cbff2a204" />


<img width="1256" height="598" alt="image" src="https://github.com/user-attachments/assets/2b216451-1667-487b-b36f-2f7ad4e3a694" />

<h2>PHYSICAL LAYER</h2>

converts binary sequence into signals and sends it over local media.

common protocol in this layer is ethernet.

<h2>DATA LINK LAYER</h2>

Divided into two sub layers -
  - MAC (media access control) sub layer
  - LLC (logic link control) sub layer


<h3>MAC LAYER</h3>
    <img width="1340" height="663" alt="image" src="https://github.com/user-attachments/assets/19636d86-dfae-4cf6-87de-b4569cd1a0aa" />


 CSMA/CD - when one device is transmitting data other stop and wait.
         - when collision happens both the devices wait for a random amount of time and retransmit the data .

  <h3>LLC LAYER</h3>

Performs flow control and error control.

error control - done by error detection and retransmission.
                error checking is done by the error checking bits added at the end of the trailer.
                retransmission is done by automatic repeat request (ARQ), reciver sends ACk when a frame is recived , else retransmission takes place.

the services of the transport layer is usually bypassed as these services are provided by transport layer.

<h3>NETWORK LAYER</h3>

adds ip addresses to the received tcp segments to form an ip packet and the sends them using routers.

so the functions are -
        - logical addressing
        - routing
        - path determination 
ip protocol is used in this layer.

<img width="1340" height="725" alt="image" src="https://github.com/user-attachments/assets/4031788f-788b-4c8a-9e44-94f3c36112ff" />


<img width="681" height="189" alt="image" src="https://github.com/user-attachments/assets/d11c367f-e6d6-4791-af84-70582276cbac" />

<h3>TRANSPORT LAYER</h3>

Receives data from application layer , then tcp (connection oriented) or udp (connection less) is selected.

<h3>APPLICATION LAYER</h3>

used by user applications
