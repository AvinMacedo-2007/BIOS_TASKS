<c><h1>OSI MODEL</h1></c>

<img width="385" height="499" alt="image" src="https://github.com/user-attachments/assets/ec988cd7-e1f9-4da3-aa51-3f30c0efb6d1" />

<h2>APPLICATION LAYER</h2>

serves as the interface between end-user software and the underlying network, enabling direct interaction with network services.
It does not refer to the application itself, but rather the protocols and mechanisms that allow applications like web browsers and email clients to communicate. 

some common protocols are HTTP, SMTP, FTP, and DNS.(these provide a stadardised rules for data exchange.

<h2>PRESENTATION LAYER</h2>

Receives data from presentation layer .
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

  <img width="919" height="719" alt="image" src="https://github.com/user-attachments/assets/3fe128b0-4e12-4524-90a5-4225d07d5b81" />






  <h1>IP ADDRESS (INTERNET PROTOCOL ADDRESS)</h1>

  An IP address is a unique number assigned to every device connected to a network, so it can send and receive data.
  
