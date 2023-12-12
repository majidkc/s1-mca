#include <stdio.h>
#include <stdlib.h>

struct node
{
    int data;
    struct node *next;
    struct node *prev;
};
int size = 0;
struct node *newnode, *head = NULL, *temp, *tail;

void insert()
{
   
    newnode = (struct node *)malloc(sizeof(struct node));
    newnode->next = NULL;
    newnode->prev = NULL;
    printf("enter the data");
    scanf("%d", &newnode->data);
    if (head == NULL)
    {
        head = newnode;
    }
    else
    {
        temp = head;
        while (temp->next != NULL)
        {
            temp = temp->next;
        }
        head = head->next;
        head->prev = temp;
    }
    size++;
}

void delbeg()
{
    printf("enter the data");
    scanf("%d", &newnode->data);
    if (head == NULL)
    {
        printf("list is empty");
    }
    else
    {
        temp = head;
        head = head -> next;
        head->prev = NULL;
        printf("%d deleted", newnode->data);
        free(temp);
    }
    size--;
}

void delend()
{
    printf("enter the data");
    scanf("%d",&newnode->data);
    if(head == NULL)
    {
        printf("list is empty");
    }
    else
    {
        if(head->next)
        head = temp;
        while (temp)
        {
            /* code */
        }
        
    }
}