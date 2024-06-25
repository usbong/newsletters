/*
 * Copyright 2024 Usbong
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 *     
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @company: Usbong
 * @author: SYSON, MICHAEL B.
 * @date created: 20240621
 * @last updated: 20240625; from 20240622
 * @website: www.usbong.ph
 *
*/
/*
 Additional Notes:
 1) compile on Windows Machine;
	gcc -c hello.c
	gcc -o output hello.o
 
 2) Execute
	output 
*/ 

#include <stdio.h>

typedef struct Data {
	int id;
	int value;
} Data_t;

void swap(Data_t *a, Data_t *b) {
	Data_t t = *a;
	*a = *b;
	*b = t;	
}

void swapTest(int *a, int *b) {
	int t = *a;
	*a = *b;
	*b = t;	
	//*b = 3000; //OK
}

int main ( int argc, char** argv)
{
	printf("Kumusta!\n");
	
	//reference: https://www.w3schools.com/cpp/cpp_arrays_size.asp; last accessed: 20240622
	//"sizeof() operator returns the size of a type in bytes."
	//"int type is usually 4 bytes"
	
	Data_t data[] = {
		{0, 75}, {1, 80}, {2, 82}, {3, 68}, {4, 56},
		{5, 97}, {6, 65}, {7, 80}, {8, 81}, {9, 92}
	};	
	
	printf("size: %d\n",sizeof(data)); //answer 80
	printf("size: %d\n",sizeof(data)/sizeof(Data_t)); //answer 10
	
	int iParent = 1/2;
	printf("answer: %d\n",iParent); //answer 0
	//-1/2; also 0
	
	return 0;
}
