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
 * @last updated: 20240621
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
	
	Data_t hal1 = {0,10};
	Data_t hal2 = {1,20};
	
	swap(&hal1, &hal2);
	
	printf("hal1 value: %d\n",hal1.value);
	printf("hal2 value: %d\n",hal2.value);

	// --
	
	int halTest1 = 1000;
	int halTest2 = 2000;
	
	swapTest(&halTest1, &halTest2);

	printf("halTest1 value: %d\n",halTest1);
	printf("halTest2 value: %d\n",halTest2);
	
	//system("pause");
	
	return 0;
}
