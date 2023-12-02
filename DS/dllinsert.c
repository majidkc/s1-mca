#include <stdio.h>
#include <stdlib.h>

struct node
{
    int data;
    struct node *next;
    struct node *prev;
};
int size = 0;
struct node *head = NULL, *newnode, *temp;

void beg()
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
        newnode->next = head;
        head->prev = newnode;
        head = newnode;
    }
    size++;
}

void end()
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
        temp->next = newnode;
        newnode->prev = temp;
    }
    size++;
}

void atpos()
{
    newnode = (struct node *)malloc(sizeof(struct node));
    newnode->next = NULL;
    newnode->prev = NULL;
    int pos;
    if (head = NULL)
    {
        printf("The list is empty");
    }
    else
    {
        printf("enter the position");
        scanf("%d", &pos);
        if (pos < 0 || pos > size + 1)
        {
            printf("invalid position");
        }
        else
        {
            printf("enter the data");
            scanf("%d", &newnode->data);
            if (pos == 1)
            {
                newnode->next = head;
                head->prev = newnode;
                head = newnode;
            }
            else
            {
                int i = 1;
                struct node *p;
                head = temp;
                while (i < pos - 1)
                {
                    temp = temp->next;
                    i++;
                }
                p = temp->next;
                newnode->next = temp->next;
                newnode->prev = temp;
                p->prev = newnode;
                temp->next = newnode;
            }
        }
    }
    size++;
}

void display()
{
    temp = head;
    printf("list forword\n");
    while (temp->next != NULL)
    {
        printf("%d", temp->data);
        temp = temp->next;
    }
    printf("%d", temp->data);
    printf("\nlist backword\n");
    while (temp->prev)
    {
        printf("%d", temp->data);
        temp = temp->prev;
    }
    printf("%d", temp->data);
}

int main(){
    int ch;
    printf("Linked list insertion\n");
    printf("__________________________________________________\n");
    printf("1.insertion at begining\n2.insertion at end\n3.insertion at perticular position\n4.display\n5.exit");
    do
    {
        printf("\nenter the operation");
        scanf("%d",&ch);
        switch (ch)
        {
        case 1:
            beg();
            break;
        case 2:
            end();
            break;
        case 3:
            atpos();
            break;
        case 4:
            display();
            break;    
        case 5:
            printf("program exited!!!");
            return 0;
        default:
            printf("invalid choice");
            break;
        }
    } while (1);
    
}