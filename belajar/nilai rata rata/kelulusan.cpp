#include <iostream>
using namespace std;

float n1,n2,n3,nt,nr;
string nama,status;
int main()
{
	cout<<"nama : ";cin>>nama;
	cout<<"nilai 1 : ";cin>>n1;
	cout<<"nilai 2 : ";cin>>n2;
	cout<<"nilai 3 : ";cin>>n3;
	
	nt= n1 + n2 + n3;
	
	nr=nt/3;
	cout<<"rata rata = "<<nr<<endl;
	
	if (nr>=75){
		status="LULUS :D";
	}
	else
	{ status="TIDAK LULUS :(";
	}
	cout<<"nama : "<<nama<<endl;
	cout<<"nilai 1 : "<<n1<<endl;
	cout<<"nilai 2 : "<<n2<<endl;
	cout<<"nilai 3 : "<<n3<<endl;
	cout<<"nilai rata ratanya = "<<nr<<endl;
	cout<<"status kelulusan = "<<status;
}
