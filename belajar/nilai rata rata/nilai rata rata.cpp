//nama:raihan aditya kah
//no:31
//kelas:10 pplg
#include <iostream>
using namespace std;
int main()
{
	int data;
	float nilai,jumlah,rata;
	cout<<"\t menghitung nilai rata rata dan jumlah \n\n";
	cout<<"masukkan jumlah data : ";
	cin>>data;
	cout<<endl;
	for (int i =1; i <= data; i++)
	{
		cout<<"nila data ke-" << i <<" : ";
		cin >> nilai;
		 jumlah += nilai;
		
	}
	cout<<"\n jumlah semua nilai : "<<data;
	rata = jumlah / data;
	cout<<"\n nilai rata ratanya   : "<<rata;
}
