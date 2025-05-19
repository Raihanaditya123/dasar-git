#include <iostream>

using namespace std;
string user,password;
string ul="dindik";
string pl="skavrat";


void log(){
	cout<<"masukkan user anda : ";cin>>user;
	cout<<"masukkan password anda : ";cin>>password;

	
	if(password == pl && user ==ul){
		cout<<"selamat datang tekan tombol next untuk memulai";
		
	}
	else 
	{
		cout<<"user atau password salah coba lagi"<<endl;
		log();
    }
}


int main(){
log();

}
	
   
	
    
   
