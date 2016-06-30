#include <sstream>
#include <vector>
#include <iostream>
using namespace std;

vector<int> parseInts(string str) {
   vector<int> res;
   stringstream ss(str);

   int i;

   while(!ss.eof()) {
      if(ss.peek() != ',') {
        ss>>i;
        res.push_back(i);  
      } else {
        ss.get();
      }

   }
   return res;
}

int main() {
    string str;
    cin >> str;
    vector<int> integers = parseInts(str);
    for(int i = 0; i < integers.size(); i++) {
        cout << integers[i] << "\n";
    }
    return 0;
}