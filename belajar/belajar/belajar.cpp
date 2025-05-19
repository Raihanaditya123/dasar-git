#include <iostream>
using namespace std;
int main()
{
	int data;
	float nilai,jumlah,rata;
	cout<<"\t program nilai rata rata \n\n";
	cout<<"masukkan jumlah data : ";cin>>data;
	cout<<endl;
	for (int i =1; i <= data; i++)
	{
		cout<<"nilai data ke-"<< i <<" : ";
		cin>>nilai;
		jumlah += nilai;
	}
	cout<<"\n jumlah semua nilai : "<<data;
	rata = jumlah/data;
	cout<<"\n jumlah nilai rata ratanya : "<<rata;
}
