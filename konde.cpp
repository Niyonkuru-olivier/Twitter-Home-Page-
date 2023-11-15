#include <iostream>
using namespace std;
class student{
	public:
		int ID;
		string name;
		void insert(int I,string n){
			ID=I;
			n=name;
		}
		void display(){
			cout<<ID<<" "<<name<<endl;
		}
};

int main(int argc, char** argv) {
	student S1;
	student S2;
	S1.insert(1,"olivier");
	S2.insert(2,"bruce");
	S1.display();
	S2.display();
	


}
